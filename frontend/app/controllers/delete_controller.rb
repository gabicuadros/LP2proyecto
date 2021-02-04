require 'httparty'
class DeleteController < ApplicationController
  include HTTParty

  def show
    HTTParty.delete "http://localhost:8000/api/laborsocial/" + params.require(:id)
    
    respond_to do |format|
      format.html{redirect_to laborsocial_index_path, notice: 'Se ha eliminado correctamente el registro.'}
    end
  end
end
